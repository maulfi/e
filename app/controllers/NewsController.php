<?php
	class NewsController extends BaseController{
		public function getIndex()
		{
			$data['active_page'] = 'nNews';
			// $data['news_list'] = NewsModel::orderBy('created_at', 'desc')->paginate(10);
			// $test = NewsModel::count();
			return View::make('admin/news_view', $data);
		}
		public function getDatasource()
		{
			  $aColumns = array('news_id', 'title','featured_image','is_published','publish_at');
			  // $page = $_GET['sEcho'];
			  $num = 10;
			  if(isset($_GET['length']))
			   $num = intval($_GET['length']);
			  $total = NewsModel::count();
			  $totalSearch = $total;
			  if(strlen($_GET['sSearch'])>0)
			  {
			   $news = NewsModel::where('title', 'like', '%'.$_GET['sSearch'].'%')->get();
			   $totalSearch = count($news);
			  }
			  else
			  {
			   //$offset = ($page-1)*$num;
			   $offset = intval($_GET['iDisplayStart']);
			   $news = NewsModel::skip($offset)->take($num)->get();
			  }
			  // $output["sEcho"] = $page;
			  $output["iTotalRecords"] = $total;
			  $output["iTotalDisplayRecords"] = $totalSearch;
			  foreach($news as $n)
			  {
			   	$row = array();
			   	foreach($aColumns as $col)
			   	{
			   		if($col == 'title')
			   		{
			   			$row[] = '<td>'.$n[$col].'</td>';
			   		}
			   		else if($col == 'featured_image')
			   		{
			   			$row[] = '<td><img src="'.asset($n[$col]).'" alt="'.$n[$col].'"></td>';
			   		}
			   		else if($col == 'is_published')
			   		{
			   			$row[] = '<td>'.($n[$col] == 1)? 'Yes' : 'No'.'</td>';
			   		}
			   		else if($col == 'publish_at')
			   		{
			   			$row[] = '<td>'.$n[$col].'</td>';
			   		}
			   }
			   $row[] = '<td>
		    		        <a href="'.url("admin/news/edit-news/".$n->news_id) .'" title="Edit" class="alun-button small blue"><i class="fa fa-edit"></i></a>
		    		        <a href="'. url("admin/news/delete-news/".$n->news_id) .'" title="Delete" class="alun-button small blue confirm2"><i class="fa fa-trash-o"></i></a>
	    		    	</td>';
			   $output['aaData'][] = $row;
			  }
			  echo json_encode($output);
		}

		public function GenerateNewsFileName()
		{
			$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$temp = '';
			$flag = 0;
			while($flag == 0){
				for($x = 0 ; $x < 15 ; $x++)
				{
					$temp .= $pool[mt_rand(0, strlen($pool) -1)];
				}
				$cek_filename = NewsModel::where('featured_image', 'like', '%'.$temp.'%')->first();
				if(count($cek_filename) == 0)
					$flag = 1;
			}
			return $temp;
		}

		public function getCreateNews()
		{
			$data['active_page'] = 'nNews';
			$data['url'] = 'news/create-news';
			return View::make('admin/create_news_view', $data);
		}

		public function postCreateNews()
		{
			$rules = array(
						'title' => 'required',
						'short_desc' => 'required',
						'content' => 'required',
					 );
			$validator = Validator::make(Input::all(), $rules);
			if($validator->passes())
			{
				$post = Input::all();
				$news = new NewsModel;
				$news->title = $post['title'];
				$news->short_desc = $post['short_desc'];
				$news->content = $post['content'];
				$news->is_published = $post['is_published'];
				$temp = explode('/', $post['publish_at']);
				$news->publish_at = date('Y-m-d', strtotime($temp[2].'-'.$temp[1].'-'.$temp[0]));
				$news->creator_id = Session::get('user_id');
				if(Input::hasFile('featured_image'))
				{
					$path = 'news_image/';
					if(!file_exists($path)) mkdir($path, 0755,true);
					$file_extension = $post['featured_image']->getClientOriginalExtension();
					$generate_name = $this->GenerateNewsFileName();
					$file_name_original = $generate_name.'_original'. '.'. $file_extension;
					$file_name_featured = $generate_name.'_featured'. '.'. $file_extension;
					$file_name_news = $generate_name.'_news'. '.'. $file_extension;
					$news->original_image = $path.$file_name_original;
					$news->featured_image = $path.$file_name_featured;
					$news->news_image = $path.$file_name_news;
					$img_featured = Image::make($post['featured_image'])->resize(100, 100);
					$img_news = Image::make($post['featured_image'])->resize(800, 600);
					$img_featured->save($path.$file_name_featured);
					$img_news->save($path.$file_name_news);
					$post['featured_image']->move($path, $file_name_original);
				}
				$news->save();
				return Redirect::to('admin/news');
			}
			View::share('error', $validator->messages());
			return $this->getCreateNews();
		}

		public function getEditNews($news_id)
		{
			$data['active_page'] = 'nNews';
			$data['news_data'] = NewsModel::where('news_id', '=', $news_id)->where('creator_id', '=', Session::get('user_id'))->first();
			if($data['news_data'] != null)
			{
				$data['url'] = 'news/edit-news/';
				return View::make('admin/create_news_view', $data);
			}
			else
				return Redirect::to('admin/news');
		}

		public function postEditNews($news_id)
		{
			$data['active_page'] = 'nNews';
			$news_data = NewsModel::where('news_id', '=', $news_id)->where('creator_id', '=', Session::get('user_id'))->first();
			if($news_data != null)
			{
				$post = Input::all();
				$news_data->title = $post['title'];
				$news_data->short_desc = $post['short_desc'];
				$news_data->content = $post['content'];
				$news_data->is_published = $post['is_published'];
				$temp = explode('/', $post['publish_at']);
				$news_data->publish_at = date('Y-m-d', strtotime($temp[2].'-'.$temp[1].'-'.$temp[0]));
				if(Input::hasFile('featured_image'))
				{
					File::delete($news_data->featured_image);
					File::delete($news_data->news_image);
					File::delete($news_data->original_image);
					$path = 'news_image/';
					$file_extension = $post['featured_image']->getClientOriginalExtension();
					$generate_name = $this->GenerateNewsFileName();
					$file_name_original = $generate_name.'_original'. '.'. $file_extension;
					$file_name_featured = $generate_name.'_featured'. '.'. $file_extension;
					$file_name_news = $generate_name.'_news'. '.'. $file_extension;
					$news_data->original_image = $path.$file_name_original;
					$news_data->featured_image = $path.$file_name_featured;
					$news_data->news_image = $path.$file_name_news;
					$img_featured = Image::make($post['featured_image'])->resize(100, 100);
					$img_news = Image::make($post['featured_image'])->resize(800, 600);
					$img_featured->save($path.$file_name_featured);
					$img_news->save($path.$file_name_news);
					$post['featured_image']->move($path, $file_name_original);
				}
				$news_data->save();
			}
			return Redirect::to('admin/news');
		}

		public function getDeleteNews($news_id)
		{
			$news_data = NewsModel::where('news_id', '=', $news_id)->where('creator_id', '=', Session::get('user_id'))->first();
			if($news_data != null)
			{
				File::delete($news_data->featured_image);
				$news_data->delete();
			}
			return Redirect::to('admin/news');
		}

		public function postUploadImageContent()
		{
			$image_path = "news_image_content/";
			$file=Input::file('file');
			if(!file_exists($image_path)) mkdir($image_path, 0755,true);
			if (Input::hasFile('file'))
			{
			   	$file_name = md5(date('YmdHis').rand(0,10000)).".".$file->getClientOriginalExtension();
			    $file->move($image_path,$file_name);
		      	$image_path.=$file_name;
		      	$array = array(
		        	'filelink' => asset($image_path)
		      	);
		      	echo stripslashes(json_encode($array));
		      	//return $image_path;
			}
		}
	}

?>
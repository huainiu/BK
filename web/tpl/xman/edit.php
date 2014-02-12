<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta name="keywords" content="baboy, cms, php, BK framework, php framework">
		<meta name="description" content="cms adminitrator">
		<meta name="author" content="Baboy">
		<title>AppMan</title>
		<link rel="stylesheet" type="text/css" href="<?=$relatvie_path?>/static/css/main.css">
		<link rel="stylesheet" type="text/css" href="<?=$relatvie_path?>/static/css/edit.css?<?=rand()?>">
		<script src="<?=$relatvie_path?>/static/js/jquery.js" charset="UTF-8"></script>
		<script src="<?=$relatvie_path?>/static/js/jquery.form.js" charset="UTF-8"></script>


		<link rel="stylesheet" type="text/css" href="<?=$relatvie_path?>/static/css/B.win.css">
		<script src="<?=$relatvie_path?>/static/js/B.util.js?<?=rand()?>" charset="UTF-8"></script>
		<script src="<?=$relatvie_path?>/static/js/init.js?<?=rand()?>" charset="UTF-8"></script>
		<script src="<?=$relatvie_path?>/static/js/admin.js?<?=rand()?>" charset="UTF-8"></script>
		<script src="<?=$relatvie_path?>/static/js/edit.js?<?=rand()?>" charset="UTF-8"></script>
		<script src="<?=$relatvie_path?>/static/js/win/B.resizable.js?<?=rand()?>" charset="UTF-8"></script>
		<script src="<?=$relatvie_path?>/static/js/win/B.win.js?<?=rand()?>" charset="UTF-8"></script>
		<script src="<?=$relatvie_path?>/static/js/win/B.win.mgr.js?<?=rand()?>" charset="UTF-8"></script>
		<script src="<?=$relatvie_path?>/static/js/editor/tinymce/tinymce.min.js" charset="UTF-8"></script>
		<style>
			
		</style>
		<script>

			tinyMCE.init({
				language: 'zh_CN',
			    selector: "textarea",
			    theme: "modern",
			    menubar: false,
			    //width: 800,
			    height: 400,
			    link_list: [
			        {title: 'My page 1', value: 'http://www.tinymce.com'},
			        {title: 'My page 2', value: 'http://www.tecrail.com'}
			    ],
			    plugins: [
			         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
			         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker",
			         "table contextmenu directionality emoticons paste textcolor responsivefilemanager"
			   ],
			    relative_urls: false,
			    browser_spellcheck : true ,
			    codemirror: {
			    indentOnInit: true, // Whether or not to indent code on init. 
			    path: 'CodeMirror'
			  },
			  
			   image_advtab: true,
			   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect | title",
			   toolbar2: "| responsivefilemanager | image | media | link unlink anchor | print preview code "
			 });

		</script>
	</head>
	<body>
		<div id="container">
			<div class="etitle">
				<div style="float:left;padding:0 10px 0;font-size:20px;font-weight:900;color:#666" role="close"> &lt; 编辑</div>
				<div style="float:right;padding:0;font-size:20px;font-weight:900;color:#666;padding:0 15px 0;">
					<a style="padding:5px 10px 5px;background:#339DFF;color:#FFF;font-size:14px;font-weight:0" role="post">保存</a>
				</div>
				<div class="t"><input type="text" value="无题" name="title" id="title" /></div>
			</div>
			<div id="main" style="border:1px solid #CCC;">
				<form action="" method="POST" onsubmit="return false">
					<input type="hidden" id="id">
					<div id="act" class="act">
						<div class="edit-panel">
							<div class="edit-item">
								<div class="editable" contenteditable="true" placeholder="添加文章摘要" id="div-summary"></div>
							</div>
							<div class="edit-item">
								<div class="pic-box-empty" id="pic-box">
									<div>
										<a class="add" role="pic-add" box="pic-box" display="pic">+ 添加海报</a>
										<img display="pic" id="pic" role="pic-add" box="pic-box"/>
										<a class="tag">海报</a>
										<a class="del"></a>
									</div>
								</div>
							</div>
							<div class="edit-item">
								<div class="pic-box-empty" id="thumbnail-box">
									<div>
										<a class="add" role="pic-add" box="thumbnail-box" display="thumbnail">+ 添加缩略图</a>
										<img id="thumbnail" display="thumbnail" role="pic-add" box="thumbnail-box" />
										<a class="tag">缩略图</a>
										<a class="del"></a>
									</div>
								</div>
							</div>

							<div class="edit-item">
								<input type="hidden" id="m3u8" name="m3u8"/>
								<div class="editable" contenteditable="true" placeholder="m3u8" id="div-m3u8"></div>
							</div>
							<div class="edit-item">
								<input type="hidden" id="mp4" name="mp4"/>
								<button class="file-browser" role="file-browser" display="div-mp4" input="mp4">File</button>
								<div class="editable" contenteditable="true" placeholder="mp4" input="mp4" id="div-mp4"></div>
							</div>
						</div>
					</div>
					<div id="info" class="info">
						<div style="" class="edit-panel">
							<div class="edit-item">
								<div class="pic-box-empty" id="pic-index-box">
									<div>
										<a class="add" role="pic-add" box="pic-index-box" display="pic_index">+ 添加索引图</a>
										<img display="pic_index" id="pic_index" role="pic-add" box="pic-index-box"/>
										<a class="tag">索引图</a>
										<a class="del"></a>
									</div>
								</div>
							</div>

							<div class="edit-item">
								<div class="editable" contenteditable="true" placeholder="副标题" id="div-subtitle"></div>
							</div>
							<div class="edit-item">
								<div class="editable" contenteditable="true" placeholder="作者" id="div-author"></div>
							</div>
							<div class="edit-item">
								<a>选择分类</a>
							</div>
							<div class="edit-item">
								<a>关键字</a>
							</div>
						</div>
					</div>
					<div class="content-wrapper" id="content-wrapper">
						<div id="content">
						<textarea></textarea>
						</div>
					</div>
				</form>
			</div>
		</div>

	</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="viewer"></div>
	<script type="text/javascript" src="{{asset('js/three.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/photo-sphere-viewer.min.js')}}"></script>
	<script>
	  var viewer = new PhotoSphereViewer({
	    container: 'viewer',
	    panorama: 'images/1.jpg'
	  });
	  console.log(viewer);
</script>
</body>
</html>
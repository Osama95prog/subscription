<body>
<h1>Hello subscriber</h1>
<h3>check out new post </h3>
{{ $subscriber['name'] }}
{{ $subscriber['email'] }}
<p>How are you ?</p>
<p>Your favorite website's has new post:  {{ $post['name'] }}  </p>
<p>it is about   {{ $post['body'] }} check it out. </p>
</body>

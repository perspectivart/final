<script src="/js/post.js"></script>
<a href="/admin/logout">log out</a>
<p>hii ndo page atapost ukiziupdate na ajak hapo chini but kwa ile page ya homepage</p>
<form role="form" id="post_form">
<input type='text' name='title' placeholder='Enter Title of Post' />
<input type="text" name="body" placeholder='Enter Body of Post' />
<input type="file" name="pics"/>
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<button type="submit" id="post_btn">Update Post</button>

</form>
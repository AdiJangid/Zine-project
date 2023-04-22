<?php
$generate='<article class="post">
<div class="post-image">
  <img src="https://picsum.photos/500/500?random=1" alt="Post Image">
</div>
<div class="post-details">
  <div class="post-header">
    <img src="https://picsum.photos/50/50?random=1" alt="User Avatar">
    <h2 class="post-author">sumit</h2>
  </div>
  <h3 class="post-title">dc ccc</h3>
  <p class="post-description">content blah blah blah</p>
  <div class="post-actions">
    <button class="post-like-btn"><i class="fas fa-heart"></i> Like</button>
    <button class="post-comment-btn"><i class="fas fa-comment"></i> Comment</button>
    <button class="post-share-btn"><i class="fas fa-share"></i> Share</button>
  </div>
</div>
</article>
<article class="post">
<div class="post-image">
  <img src="https://picsum.photos/500/500?random=2" alt="Post Image">
</div>
<div class="post-details">
  <div class="post-header">
    <img src="https://picsum.photos/50/50?random=2" alt="User Avatar">
    <h2 class="post-author">sandesh</h2>
  </div>
  <h3 class="post-title">marvel</h3>
  <p class="post-description">marve nature is loveable
  </p>
  <div class="post-actions">
    <button class="post-like-btn"><i class="fas fa-heart"></i> Like</button>
    <button class="post-comment-btn"><i class="fas fa-comment"></i> Comment</button>
    <button class="post-share-btn"><i class="fas fa-share"></i> Share</button>
  </div>
</div>
</article>';
$pdo= new PDO('mysql: host=192.168.1.4;dbname=login;port=3306','root','Adity@1154');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
if ($pdo!=0){
    $result= $pdo->query("Select * from post");
    while ($row = $result->fetch()) {
        $title[] = $row['Title'];
        $content[]=$row['Content'];
        }
    
    for($i=0;$i<count($title);$i++) {
        $generate=$generate.'<article class="post">
        <div class="post-image">
          <img src="https://picsum.photos/500/500?random=2" alt="Post Image">
        </div>
        <div class="post-details">
          <div class="post-header">
            <img src="https://picsum.photos/50/50?random=2" alt="User Avatar">
            <h2 class="post-author">sandesh</h2>
          </div>
          <h3 class="post-title">'.$title[$i].'</h3>
          <p class="post-description">'.$content[$i].'
          </p>
          <div class="post-actions">
            <button class="post-like-btn"><i class="fas fa-heart"></i> Like</button>
            <button class="post-comment-btn"><i class="fas fa-comment"></i> Comment</button>
            <button class="post-share-btn"><i class="fas fa-share"></i> Share</button>
          </div>   
        </div>
      </article>';
    }
} 
    include 'mainpage.html.php';
?>

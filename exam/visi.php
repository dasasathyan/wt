<?php
class name{

    private $name="Dasa Sathyan";

}
class post extends name{
  function postit(){
    return $this->name;
  }
}
$name=new name;
//echo $name->name;
$post=new post;
echo $post->postit();

//echo $name->keepit;

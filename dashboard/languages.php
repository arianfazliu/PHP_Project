<?php
session_start();
class Card{
  var $title;
  var $text;
  var $color;

  public function __construct($title,$text,$color){
    $this->title=$title;
    $this->text=$text;
    $this->color=$color;
  }
}
class CardB extends Card{
  private $percentage;

  public function __construct($title,$text,$color,$percentage)
  {
    $this->title=$title;
    $this->text=$text;
    $this->color=$color;
    $this->percentage=$percentage;
  }

  private function setPercentage($percentage) {
    $this->percentage = $percentage;
  }

  private function getPercentage() {
    return $this->percentage;
  }


  public function __set($name,$value) {
    switch($name) {
      case 'percentage': 
        return $this->setPercentage($value);
    }
  }

  public function __get($name) {
    switch($name) {
      case 'percentage': 
        return $this->getPercentage();
    }
  }


}
$con = mysqli_connect("localhost","root","","login");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
define('MYSQL_ASSOC',MYSQLI_ASSOC);
$username=$_SESSION["username"];
mysqli_select_db($con,"login");
$sql="SELECT languages FROM courses WHERE username = '$username'";
$result = mysqli_query($con,$sql);
$titles=array();

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) { 
  $titles[] = $row['languages'];
}
 $texts = array('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi soluta reprehenderit facilis tenetur quisquam, natus suscipit vel, eius ipsum quibusdam cumque iusto culpa, praesentium quod fugiat! Tempore aliquid velit, odio!','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptatibus, beatae inventore, quam, tempora quidem hic qui similique, molestiae nam a incidunt eum eos eligendi possimus maxime sit minus. Nobis.','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus commodi, possimus aspernatur, distinctio numquam molestias dolores eum, reprehenderit dignissimos doloremque est, optio? Nam non distinctio eveniet, quidem voluptatem quibusdam alias?','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor id, porro temporibus recusandae, illo laboriosam repudiandae velit nobis voluptas sapiente dicta a, cumque placeat corporis autem, asperiores accusamus sint commodi!',
 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi soluta reprehenderit facilis tenetur quisquam, natus suscipit vel, eius ipsum quibusdam cumque iusto culpa, praesentium quod fugiat! Tempore aliquid velit, odio!','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptatibus, beatae inventore, quam, tempora quidem hic qui similique, molestiae nam a incidunt eum eos eligendi possimus maxime sit minus. Nobis.','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus commodi, possimus aspernatur, distinctio numquam molestias dolores eum, reprehenderit dignissimos doloremque est, optio? Nam non distinctio eveniet, quidem voluptatem quibusdam alias?','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor id, porro temporibus recusandae, illo laboriosam repudiandae velit nobis voluptas sapiente dicta a, cumque placeat corporis autem, asperiores accusamus sint commodi!',
 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi soluta reprehenderit facilis tenetur quisquam, natus suscipit vel, eius ipsum quibusdam cumque iusto culpa, praesentium quod fugiat! Tempore aliquid velit, odio!','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptatibus, beatae inventore, quam, tempora quidem hic qui similique, molestiae nam a incidunt eum eos eligendi possimus maxime sit minus. Nobis.','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus commodi, possimus aspernatur, distinctio numquam molestias dolores eum, reprehenderit dignissimos doloremque est, optio? Nam non distinctio eveniet, quidem voluptatem quibusdam alias?','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor id, porro temporibus recusandae, illo laboriosam repudiandae velit nobis voluptas sapiente dicta a, cumque placeat corporis autem, asperiores accusamus sint commodi!');
 $percentages1 = '83%.30%.75%.33%.83%.30%.75%.33%.83%.30%.75%.33%';
 $percentages = preg_split("/\./",$percentages1);
 //$percentages = array('83%','30%','75%','33%','83%','30%','75%','33%','83%','30%','75%','33%');
$colors=array('#618fee','#ee8c62','#91e78e','#618fee','#618fee','#ee8c62','#91e78e','#618fee','#618fee','#ee8c62','#91e78e','#618fee');
$cards = array();
for ($i=0;$i<sizeof($titles);$i++){


    $cards[] = new CardB($titles[$i],$texts[$i],$colors[$i],$percentages[$i]); 
}
include('../components/header.php');
class Constructor{
  public function construct(){
     echo "<!DOCTYPE html><html>";
  }
  public function destruct(){
     echo "</html>";
  }
}
?>
<?php $construct = new Constructor() ?>
<head>
  <title>Languages</title>
<script>
function myFunction(){

}
</script>
<style type="text/css">
html,body{
  height: 100%;
  box-sizing: border-box;
  background-color: #fafafa;
}
.homepage{
  padding: 20px 100px;
  height: 100%;
}
.display_grid{
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: white;
  margin:20px 0;
  border-radius:5px;
}
.display_grid div{
    text-align:center;
    margin:10px 15px 25px 15px;
}
.cards, .loading{
  border-radius:5px;
  border:solid 1px #f1f1f1;
  padding: 5px 20px;
  box-shadow:0 0px 5px 0px #f1f1f1;
}
.cards-h3{
  font-weight: 400;
  letter-spacing: .5px;
}
.loremi{
  color:gray;
  font-size:15px;
  word-break: break-all;
}
.loading{
  padding:20px;
  display: flex;
  align-items: center;
}

.butoni{
  display: flex;
  cursor:pointer;
  align-items: center;
  background-color: white;
  font-size:15px;
  border:none;
  border-radius:5px;
  padding:10px 15px;
  outline:none;
}
object{
  margin-bottom:-3px;
  margin-left:2px;
}
</style>
</head>
<body>
<div class="homepage">
  <div class="display_grid"> 
    <?php  
    foreach($cards as $card){
      echo"<div>
        <div class=\"cards\">
          <h3 class=\"cards-h3\">
            $card->title
          </h3>
          <p class=\"loremi\">$card->text</p>
        </div>
        <div class=\"loading\">
          <div style='position:relative;width:100%;margin:0 10px 0 0 ; height: 3px;background-color:#f1f1f1;'>
            <div style='position: absolute;left:0;top:0;margin:0;width:$card->percentage;height:3px;z-index:1;background-color:$card->color'></div>
          </div>
          $card->percentage
        </div>
      </div>";
    }
    ?>
  </div>
</div>
</body>
<?php include('../components/footer.php'); ?>

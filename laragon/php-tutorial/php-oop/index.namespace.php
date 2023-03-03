<?php 
namespace Html;
class Freewriting{
    public $title = "";
    public $numPara = 0;
    public function text(){
        echo "<p> {$this->title} consists of {$this->numPara} paragraphs.";
    }
}
class Pages{
    public $title = "";
    public $numCount = 0;
    public function text(){
        echo "<p> {$this->title} has {$this->numCount} pages.";
    }
}
use Html\Freewriting as hf;
$body = new hf;
$body->title = "PHP";
$body->numPara = 6; 



use Html\Pages as hp;
$page = new hp;
$page->title = "PHP";
$page->numCount = 10;

?>

<!DOCTYPE html>
<html lang="en">

<body>
    <?php $body->text();?>
    <?php $page->text(); ?>
</body>
</html>
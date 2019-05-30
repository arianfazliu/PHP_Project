<?php 
    class Cards{
        var $title;
        var $text;
        var $contact;
    }
    $card1 = new Cards;
    $card1->title="Languages";
    $card1->text="We'd love to talk about how we can work together";
    $card1->contact="languages ->";
    $card2 = new Cards;
    $card2->title="Help & Support";
    $card2->text="We're here to help with any questions or code.";
    $card2->contact="Contact support ->";
    $card3 = new Cards;
    $card3->title="Social media";
    $card3->text="Follow us on Twitter so you can be updated with our each new feature!";
    $card3->contact="Visit our page->";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
</head>

<body>
    <div class="quiz">
        <?php include('../components/header.php') ?>
        <div class="contactus">
            <div style="display: flex;width: 100%;align-items:center;justify-content: space-around;">
                <div class="side-note">
                    <h3 class="cards-h3" style="color: #6b6b6b;">Feel like contacting us?</h3>
                    <p>Get in touch and let us know how we can help</p>
                    <p>
                    Submit your queries here and we will get back to you as soon as possible
                    </p>
                </div>
                <div class="cards" style="width:40%;color:black;padding:20px">
                    <h4 style="margin:10px auto 20px auto;width:50%;font-weight: 400;color:#686868;padding:10px 0;box-shadow: 0 4px 2px -3px #dfe0e0;">Send us a Message</h4>
                    <form method="post" action="send_mail.php">
                        <input placeholder="The email you're sending the message to" type="text" name="mail_to">
                        <input placeholder="Subject of the email" type="text" name="mail_sub">
                        <input placeholder="Message" type="text" name="mail_msg">
                        <input type="submit" value="Send Email">
                    </form>
                </div>
            </div>
        </div>
        <?php include('../components/footer.php') ?>
    </div>
</body>

</html>
<script></script>
<style>
body,html{
	height: 100%;
	box-sizing: border-box;
	margin:0;
    background-color: #fafafa;
    font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
}
form{
    display: flex;
    flex-direction: column;
}
form input{
    width: 100%;
    outline: none;
    border:none;
    border-bottom:solid 1px #dfe0e0;
    margin:20px 0;
    padding: 5px 0;
    font-size: 15px;
}
input:last-child{
    border:solid 1px #63cdb7;
    color:white;
    background-color: #63cdb7;
    border-radius:20px;
    padding: 10px 0;
    cursor: pointer;
}
input::placeholder{
    color:#a6a6a6;
}
.quiz{
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: center;
}
.contactus{
    position: relative;
    color:black;
    background-color: white;
    padding: 20px;
    margin:20px;
    box-shadow:0 0px 5px 0px #f1f1f1;
}
.display_grid{
    display: grid;
    grid-template-columns: auto auto auto;
    border-radius:5px;
    background-color: transparent;
}
.display_grid div{
        text-align:center;
        margin:10px 15px 25px 15px;
}
.cards{
    margin:20px 0 0 0 ;
    background-color: white;
    border-radius: 5px;
    border:solid 1px #f1f1f1;
    padding: 5px 20px;
    box-shadow:0 0px 5px 0px #f1f1f1;
    margin-bottom:0!important;
}
.loading{
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    margin-top:0!important;
    border:solid 1px #f1f1f1;
    padding: 5px 20px;
    background-color: #f6f9fd;
    //box-shadow:0 5px 5px 0px #f1f1f1;
}
.loremi{
    color:gray;
    font-size:15px;
}
.loading p{
    margin:5px 0;
}
.side-note p{  
    color: #6b6b6b;
    margin:5px 0;
    font-size:16px;
}
</style>
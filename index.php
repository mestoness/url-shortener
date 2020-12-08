<!DOCTYPE html>
<html>
<head>	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.css" integrity="sha512-8bKh9RpTTQf+EOCSqu/jiAhcUlb5BpcWy0eXEijSX7yode10sZLU3dLBcmoaj15chLpVb+/TY0Z6SL//d4lVAQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<!-- JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src= 
"https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"> 
</script> 
<meta charset="utf-8">
	<title></title>
    <style>
      body {background: #e3e1e1}  
html,body{
background: #e3e1e1}
    </style>


</head>
<body>
	<?php include 'baglan.php'; ?>
	<br><br><br><br><br>
    <div style="text-align:center;" class="title">
    <h1 class="title">Link Kısaltma | Mestoness</h1>
    <h2 class="subtitle">Belirtilen linki kısaltır.</h2>
</div>
<form method="POST">
	  <div class="field is-grouped is-grouped-centered">

            <p class="control has-icons-left has-icons-right">
        	<input type="text" name="eski_link" required="" class="input" placeholder="URL giriniz" value="<?php if (isset($_POST["gonder"])) {
		# code...
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$randomsay=generateRandomString(13);
$random=rand();
$query=$db->prepare("INSERT INTO link set 
eski_link=:eski_link,
yeni_link=:yeni_link");
$insert=$query->execute(array(
    'eski_link' => $_POST['eski_link'],
        'yeni_link' =>$randomsay

));

}
	 ?>">
                <span class="icon is-small is-left">
                    <i class="fas fa-link"></i>
                </span>
                <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>

                </span>
            </p>
            <button type="submit" name="gonder"  class="button is-link"><i class="fas fa-link
"></i></button>
     
</form>
   </div>



<?php 

if (isset($_POST["gonder"])) { 
    ?><br>  
          <div class="field is-grouped is-grouped-centered">

<center>
            <p class="control has-icons-left has-icons-right">

<input type="text" value="<?php if ($insert) {

    echo "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].$randomsay;
} ?>" class="textToBeCopied input" style="width: auto;">
   <span class="icon is-small is-left">
                    <i class="fas fa-link"></i>
                </span>
<button class="button is-link copyButton" ><i class="fa fa-copy"></i></button></center>

</div>
 </center></p>
<?php } ?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script>
    
const textToBeCopied = document.querySelector('.textToBeCopied');
const copyButton = document.querySelector('.copyButton');

textToBeCopied.addEventListener('blur', function() {
  copyButton.classList.remove('active');
  copyButton.innerHTML = "<i class='fa fa-copy'></i>";
})

copyButton.addEventListener('click', function() {
  copyButton.classList.add('active');
  textToBeCopied.focus();
  textToBeCopied.select();
  document.execCommand('copy');
  if (this.innerHTML = "<i class='fa fa-copy'></i>") {
    this.innerHTML = "<i class='fa fa-copy'></i>!";
  }
})


</script>
</body>
</html>
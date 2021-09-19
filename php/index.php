1. A string = “(‘apple’,’orange’,’banana’), ” <br>
	a. Remove the trailing “, ” <br>
	b. Then add “;” <br>
<br>
Answer: 

<?php
$string ="('apple','orange','banana'),";

//Remove the trailing "," and add ";"
$result= str_replace(',', ';', $string);
echo $result;
?>
<br>
--------------------------------------------
2. There is no way to change a value of constant. If you can change it then why it should be constant. 
<br>
3. How you can pass the variable by the navigation between the pages in php?
<br>
Answer: Put the variable into session in the first page, and get it back from session in the next page.
<br>
4. How to get a data from a php variable into javascript variable? <br>
Answer:
<?php
$php_variable = "string"; //Define our PHP variable.
?>			
<script type="text/javascript">
 let js_variable_name = "<?=$php_variable;?>";
</script>
<br>
5. How to receive or extract values from a http request? <br>
Answer: We can receive http request by using global variable $_REQUEST. The PHP $_REQUEST variable contains the contents of both $_GET, $_POST, and $_COOKIE. <br>
6.How to submit a form and what happens after that submitting a form? <br>
Answer: 
<form method="post" action="action.php"></form>
When you click the submit button, your form data will be sent to the file specified on the form tag - in your case, "/action_page.php". What arrives there are a number of variables with a name and a value. <br>
Note that the "variable name" is what is specified in the name= attribute of the (for e.g.) input field, and the "variable contents" is whatever is typed into the (for e.g.) input field. <br>

Your back-end PHP file will need to create proper PHP $variables for each of these items, using either the $_POST or $_GET command, depending what method you used in the "method=" attribute of the form tag. As an example, your form has a textarea element called name=comment. On the PHP side, you can write: <br>

$cmt = $_GET['comment']; <br>
and  you have the user's comment in a PHP variable $cmt. <br>

You can do the validation at this stage, or you can validate the code in javascript before the file is even submitted. Note that javascript can intercept the form submit process and stop it, or continue it. <br>

Then, your PHP file can either send the user back to the same page (in which case, you need a <?php ?> section at the top to handle that), or on to another page entirely.
<br>
7. Definition : <br>
a. Session : A session is a way to store information to be used scross multiple pages. Session is used to store data on server. <br>
b. AJAX: Asynchronous JavaScript And XML. AJAX is a technique for creating fast and dynamic web pages. <br>
c. SQL injection: SQL injection is a common attact that uses malicious SQL (Structured Query Language) code to manipulate a database and gain access to potentially valuable information. <br>
d. Dynamic websites: Dynamic website contains web pages that can display different content and provide user interaction, by making use of advanced programming and databases in addition to HTML. <br>

8. How to read contents from a file and write contents in a file. <br>
Answer: First we need to open file using fopen('file_localtion','mode'). Ex: $myfile= fopen('file.txt','r'); then reads it fgets($myfile); after that close the file using fclose($myfile). <br>
And for file write : Ex:  $myfile = fopen("newfile.txt", "w"); <br>
$txt = "Hellow world\n"; <br>
fwrite($myfile, $txt); <br>
fclose($myfile); <br>

9. 9. Have an array of [first_name, last_name, age] <br>
	a. $array = [
		['Joe', 'joe@hmail.com', 24],
		['Doe', 'doe@hmail.com', 25],
		['Dane', 'dane@hmail.com', 20]
	]; <br>
	b. Print this array in html table <br>
Answer: 

<?php 
$array = [
		['Joe', 'joe@hmail.com', 24],
		['Doe', 'doe@hmail.com', 25],
		['Dane', 'dane@hmail.com', 20]
	];

?>

<?php if (count($array) > 0){ ?>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Age</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($array as $row){?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php }; ?>
  </tbody>
</table>
<?php } ?>


<style>
  textarea,p {
  width: 90%;
  height: 80px;
}
p {
  border: 1px solid #eee;
  padding: 5px;
  white-space: pre; // <--- This is the important part
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="box">
  <textarea></textarea>
  <br/>
  <p></p>
</div>



<script>
  $('.box textarea').keyup(function() {
  $(".box p").html(this.value);  // replace is not needed here
});
</script>
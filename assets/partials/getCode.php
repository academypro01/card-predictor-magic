<div class="container">
    <form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='POST'>
        <div class="form-group">
            <input id='code' onkeyup='check_input()' mins='6' maxs='7' autocomplete='off' name='code' type="number" class="form-control my-2 text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Magician Spell Code">
        </div>
        <input disabled id='button' name='btn' type="submit" class="btn btn-primary form-control" value="Magic">
        <div class="form-group">
            <p class='text-light m-2'>Last update: 3 days ago</p>
        </div>
    </form>
    </div>
<script type='text/javascript'>
    function check_input() {
        let max = document.getElementById("code").getAttribute("maxs");
        let min = document.getElementById("code").getAttribute("mins");
        let val = (document.getElementById("code").value).length;
        if(val <= 7 && val >= 6) {
            document.getElementById("button").disabled = false;
        }else{
            document.getElementById("button").disabled = true;
        }
    }
</script>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

    <div class="input-group w-75 float-end">
        <input type="number" class="form-control" name="surfcommission" value="<?php echo $site_info_row['surf_commission'];?>" 
               step="0.1" min="0" required="">
        <input type="submit" class="btn btn-outline-primary btn-sm fw-bold" value="<?php echo ucfirst($changeName);?>">
    </div>

</form>
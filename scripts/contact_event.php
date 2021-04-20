<?php 
    $phone = 'tel:5169625146';
    $mai = 'mailto:info@preareo.com';
?>
<script>
    let phon = document.querySelectorAll('.phnBtn');
    let email = document.getElementById('emailBtn');

    if (phon !== null ){
    
    phon.forEach(btn => { btn.addEventListener("click", event => { 
        location.href = "<?php echo $phone; ?>";
    })
    });
};

  if (email !== null){  email.addEventListener("click", function(){
       location.href = "<?php echo $mai; ?>";
    });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script lang="JavaScript/text">

    let a=document.getElementsByTagName("title")[0].innerText
    let li=document.getElementsByTagName("li")
    console.log(a);


    if(a===li[0].innerText){
    li[0].style.backgroundColor="red";

    }
    else if(a===li[1].innerText){
        li[1].style.backgroundColor="red";
    }
    else if(a===li[2].innerText){
        li[2].style.backgroundColor="red";
    }


</script>

</body>

</html>

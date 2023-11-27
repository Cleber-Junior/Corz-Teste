function confirma_exclusao(){
    resp = confirm("Confirmar Exclusão")

    if(resp == true){
        return true;
    }else{
        return false;
    }
}
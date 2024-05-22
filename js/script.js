     let btn = document.getElementById("enviar");

        function envia(){
            let login = document.getElementsByName("login")[0].value;
            let senha = document.getElementsByName("senha")[0].value;

            if(login === ""){
                alert("Por Favor preencha o campo de login");
            }
            else if(senha === ""){
                alert("Por Favor preencha o campo de senha");
            }
        }

        btn.addEventListener("click", envia);
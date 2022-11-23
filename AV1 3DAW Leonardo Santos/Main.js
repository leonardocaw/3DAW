
            function criarLinhaTabela(pobjReturnJSON) {
                let tb = document.getElementById("tab");
                 let tr = document.createElement("tr");
    
                let td2 = document.createElement("td");
                textnode = document.createTextNode(pobjReturnJSON.Nome);
                td2.appendChild(textnode); 
                tr.appendChild(td2);
    
                let td5 = document.createElement("td"); // cria o element td
                textnode = document.createTextNode(pobjReturnJSON.Id);
                td5.appendChild(textnode); // adiciona o texto na td criada
                tr.appendChild(td5); // adiciona a td na tr
    
                let td3 = document.createElement("td"); // cria o element td
                textnode = document.createTextNode(pobjReturnJSON.Prérequisito);
                td3.appendChild(textnode); // adiciona o texto na td criada
                tr.appendChild(td3); // adiciona a td na tr
    
                let td4 = document.createElement("td"); // cria o element td
                let tagP = document.createElement("span", "onclick");
                let textnode1 = "Alterar.php('" + pobjReturnJSON.matricula + "')";
                tagP.setAttribute("onclick",textnode1);
                
                textnode = document.createTextNode("Alterar");
                tagP.appendChild(textnode);
    
                td4.appendChild(tagP); // adiciona o texto na td criada
                tr.appendChild(td4); // adiciona a td na tr
    
                tb.appendChild(tr);
    
                // let tr_fim = document.getElementById("ultimaLinha"); // pega a tr pelo id
                // // adiciona o elemento criado, a partir do nó pai (no caso <table>)
                // tr_fim.parentNode.insertBefore(tr, tr_fim);
            }
<?php   
    function matricula($cadena){
        if (preg_match('/^[0-9]{4}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}$/', $cadena)){
            echo "Matricula valida";
        }else{
            echo "Matricula no valida";
        }
    }

    matricula('4444DBs');
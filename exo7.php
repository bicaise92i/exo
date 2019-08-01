<!DOCTYPE html>
<html>
    <head>
      <title>Exo1</title>
      <meta charset="UTF-8">
    </head>
    <body style="background-image: url('bg.jpg');">
      <!-- div1 -->
        <div style="width:980px; 
            height:600px; 
            border:2px solid;
            margin:0 auto"
        >
            <!-- div2 -->
            <div style="width:100%; 
                height:50px; 
                border-bottom:2px solid;
                background-color: gray;
                "
            >
              
            </div>


            
            <!-- div3 -->
            <div style="width:900px; 
                height:500px; 
                margin: 0 auto;
                 "> 

                  <!-- div4 -->
                  <div style="width:300px; 
                height:500px; 
                margin-top: 20px;
                background-color: salmon;
                border-radius: 5px;
                border:3px solid black; 
                        

                "> 
                 <form style="margin-top: 5px; margin-left: 10px; margin-right: 50px;" action="cible.php" method="post">

                    <div style="margin-bottom: 15px;"> <label>  Nom: </label> 
                        <input type="text" > 
                    </div> 
                    <div style="margin-bottom: 15px;"> <label>  Prenom: </label>   <input type="text" > </div> 
                    <div style="margin-bottom: 15px; border-bottom: 2px solid black;"> 
                      <label style="font-family: arial; font-size: 20px">  SEXE: </label>  </br>
                      <input type="radio" name="genre" value="Masculin" > <label>  Masculin </label>
                      <input type="radio" name="genre" value="Féminin" > <label>  Féminin </label>

                    </div> 

                    <div > 
                    <label style="font-family: arial; font-size: 20px">  COMPETENCES: </label> </br>

                        <input type="checkbox" name="competences" value="Management" > <label>  Management </label> </br>
                        <input type="checkbox" name="competences" value="Management" > <label>  Développement </label> </br>
                        <input type="checkbox" name="competences" value="Management" > <label>  Marketing </label> </br>
                        <input type="checkbox" name="competences" value="Management" > <label>  Digitalisation </label> </br>
                     </div > 

                      <div style="margin-bottom: 1  0px; border-bottom: 2px solid black;"> 


                        <label style="font-family: arial; font-size: 20px">  REFERENTIEL: </label> </br>

                      <select>
                              <option value="Référent digital">Référent digital</option>
                              <option value="Data Artisan">Data Artisan</option>
                              <option value="Développement Web">Développement Web</option>

                        </select> 
                      </div >

                        <label style="font-family: arial; font-size: 15px;">  DESCRIPTION: </label> </br>

                        <TEXTAREA name="commentaire" style="float:right;"> Entrer votre description</TEXTAREA>


                    <div style="float: right; margin-top: 20px;">   <input type="submit" value="Enregistrer"> 

                                                                    <input type="submit" value="Annuler">
                    </div>

                    </form> 

                 </div>



                <!-- div5 -->
                 <div style="width:500px; 
                    height:500px; 
                    margin-top: 20px;
                    background-color: salmon;
                    border-radius: 5px;
                    position: absolute;
                    top: 65px;
                    right: 200px;     
                    border:3px solid black;  
                    "> 
                    <table style="width:90%; border:2px solid black;margin-left: 20px; margin-top:20px;">
                        <tr style="text-align: center; ">
                            <th style="border:2px solid black;"> Nom </th>
                            <th style="border:2px solid black;"> Prenom </th>
                            <th style="border:2px solid black;"> Sexe </th>
                            <th style="border:2px solid black;"> Competences </th>
                            <th style="border:2px solid black;"> Rédérentiel </th>

                        </tr>
                        <tr style="text-align: center;height: 40px;">
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>

                        </tr >

                        <tr style="text-align: center;height: 40px;">
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>

                        </tr>

                        <tr style="text-align: center;height: 40px;">
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>

                        </tr>

                        <tr style="text-align: center;height: 40px;">
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>
                            <td style="border:2px solid black;"> </td>

                        </tr>
                      


                    </table>


                 </div>

            </div>


      </body>
</html>
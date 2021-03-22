<?php get_header(); ?> 
<?php

    $url_api = 'https://jsonplaceholder.typicode.com/users';
    $dados_api = json_decode(file_get_contents($url_api));

?>
 
    <main> 
        <div class="container">
            <h2 class="title-single">Listagem de API</h2>


            
            <table>
                <thead class="border-bottom-black">
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Cidade</th>
                        <th>Companhia</th>
                    </tr>
                </thead>
                
                <tbody>
                
                    <?php
                        foreach ($dados_api as $value) {

                            echo '<tr>';
                                echo '<td>'.$value->name.'</td>';
                                echo '<td>'.$value->email.'</td>';
                                echo '<td>'.$value->address->city.'</td>';
                                echo '<td>'.$value->company->name.'</td>';
                            echo '</tr>';

                        }
                    ?>

                </tbody>

            </table>

        </div>
        
    </main> 

<?php get_footer(); ?>
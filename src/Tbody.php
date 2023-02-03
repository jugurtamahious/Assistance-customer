<?php
function table() { ?>
    <div class = "container_table">
                    <table class="table is-bordered  is-narrow ">
                      <thead>
                        <tr><th><abbr title="Numero de la demande">
                                 Numero
                                <form method="post">
                                    <input class="input" type="number" name="id" value="<?php if(isset($_POST['id'])){echo"{$_POST['id']}";}?>">
                                    <button class="button-15" type="submit">soumettre</button>
                                </form>
                            </abbr></th>
                        <th><abbr title="logiciel">Logiciel</abbr></th>
                          <th><abbr title="date">Date
                                  <form method="post">
                                      <div class="rotate">
                                      <button type="submit" name="datedesc"><</button>
                                      <button  type="submit" name="dateasc">></button>
                                      </div>
                                  </form>
                              </abbr></th>
                          <th><abbr title="demandeur">Demandeur
                                  <form method="post">
                                      <input class="input" type="text" name="demandeur" value="<?php if(isset($_POST['demandeur']) && isset($_POST["filtre"])){echo"{$_POST['demandeur']}";}?>">
                                      <button class="button-15" type="submit" name="filtre" >soumettre</button>
                                  </form>
                              </abbr></th>
                          <th><abbr title="demande">Demande
                                  <form method="post">
                                      <input  class="input" type="text" name="demande" value="<?php if(isset($_POST['demande']) && isset($_POST["filtre"])){echo"{$_POST['demande']}";}?>">
                                      <button class="button-15" type="submit" name="filtre">soumettre</button>
                                  </form>
                              </abbr></th>
                          <th><abbr title="traveaux">Travaux
                                  <form method="post">
                                      <input class="input" type="text" name="travaux" value="<?php if(isset($_POST['travaux']) && isset($_POST["filtre"])){echo"{$_POST['travaux']}";}?>">
                                      <button class="button-15" type="submit" name="filtre">soumettre</button>
                                  </form>
                              </abbr></th>
                          <th><abbr title="fichiers">Fichiers</abbr></th>
                          <th><abbr title="date intervention">Date d'intervention
                                  <form method="post">
                                      <div class="rotate">
                                      <button type="submit" name="responsedatedesc"><</button>
                                      <button type="submit" name="responsedateasc">></button>
                                      </div>
                                  </form>
                              </abbr></th>
                          <th><abbr title="temps passé">Temps passé</abbr></th>
                          <th><abbr title="réponse">Réponse
                                  <form method="post">
                                      <input class="input"   type="text" name="response" value="<?php if(isset($_POST['response']) && isset($_POST["filtre"])){echo"{$_POST['response']}";}?>" >
                                      <button  class="button-15" type="submit" name="filtre">soumettre</button>
                                  </form>
                              </abbr></th>
                            <th><abbr title="Ma demande">Ma demande</abbr></th>
                            <th><abbr title="Satisfaction">Satisfaction</abbr></th>
                       </tr>
                      <tbody>

<?php }

                            <form  action="signup_save.php" method="post" autocomplete="on"> 
                                <h4> REGISTRATE FORMA PARTE DE NUESTRA COMUNIDAD</h4> 
								<hr>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Tu usuario</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="Usuario" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Tu contraseña </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="Contraseña"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="u">Nombre </label>
                                    <input id="passwordsignup" name="firstname" required="required" type="text" placeholder="Primer Nombre"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="u">Apellido </label>
                                    <input id="passwordsignup" name="lastname" required="required" type="text" placeholder="Apellido"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="">Genero</label>
									<select id="passwordsignup"  name="gender">
										<option></option>
										<option>Hombre</option>
										<option>Mujer</option>
                                        <option>Otros</option>
                                        
									</select>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="REGISTRATE"/> 
								</p>
                                <p class="change_link">  
									Ya eres parte de la Familia?
									<a href="#tologin" class="to_register"> Ingresar </a>
								</p>
                            </form>
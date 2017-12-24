	<div id="right">
	 <div class="one">
			<br><br>
			<div>
				<?php
				require("connect1.php");
				?>
				<form action="login.php" method="post">
				<table align="center">
				
					<tr>
						<td>
							<?php
				if (isset($_POST['login'])) {
					if (!$_POST['name']) {
						echo "<h4 style='color:#FF4300;' class='alert'>Please enter your name</h4>";
					}
					elseif (!$_POST['password']) {
						echo "<h4 style='color:#FF4300;' class='alert'>Please enter password</h4>";
					}
					else
					{
						session_start();
						$_SESSION['name']=$_POST['name'];
						$name=$_POST['name'];
						$password=$_POST['password'];
						$result=mysql_query("SELECT * FROM users WHERE name='$name' AND Password='$password'");
						if ($row=mysql_fetch_array($result)) 
						{
							header('Location:admin_pages/home.php');
						}
						else
						{
							echo "<h4 style='color:#FF4300;' class='alert' >Wrong name or password</h4>";
						}
					}
				}
				?>
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<input type="text" name="name" placeholder="Enter Username" class="input">
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<input type="password" name="password" placeholder="Enter Password" class="input">
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<center>
							<input type="submit" value="Login" class="login_btn" name="login">
							</center>
						</td>
					</tr>
				</table>
				</form>
				
			</div>
    </div>
	<div class="three">
		<b class="title">NEWS AND EVENTS</b>
		<hr>
		<marquee direction="up" scrollamount="1" onmouseout="this.start()" onmouseover="this.stop()">
		<table align="center" width="100%" class="news" border="1" style="border-collapse:collapse;>
			
			
				<?php 
				$query=mysql_query("SELECT * FROM `news` ORDER BY `id` DESC");
				while ($row=mysql_fetch_assoc($query)) {
					$id=$row['id'];
					$heading=$row['heading'];
					$full_news=$row['full_news'];
					echo '<tr border="">';
					echo '<td>&nbsp; <img src="img/news.png">&nbsp;&nbsp;&nbsp;<a href="news.php?id='.$id.'  ">'.$row['heading']."</a></td>";
					echo '</tr>';
				}

				?>
			
			
			
		</table>
	</marquee>
	</div>
	<div class="two">
		<b class="title">QUICK LINKS</b>
		<hr>
		<table align="center" width="100%" class="news">
			<tr>
				<td>&nbsp; <img src="img/news.png">&nbsp;&nbsp;&nbsp; <a href="result.php" class="admissionlinks">Examination Result</a></td>
			</tr>
			<tr>
				<td>&nbsp; <img src="img/news.png">&nbsp;&nbsp;&nbsp; <a href="timetable.php" class="admissionlinks">Exam Timetable</a></td>
			</tr>
			<tr>
				<td>&nbsp; <img src="img/news.png">&nbsp;&nbsp;&nbsp; <a href="graduation.php" class="admissionlinks">Graduation Day</a></td>
			</tr>
			<tr>
				<td>&nbsp; <img src="img/news.png">&nbsp;&nbsp;&nbsp; <a href="downloads.php" class="admissionlinks">Downloads </a></td>
			</tr>
			<tr>
				<td>&nbsp; <img src="img/news.png">&nbsp;&nbsp;&nbsp; <a href="scholarship.php" class="admissionlinks">Scholarship </a></td>
			</tr>
		</table>
	</div>
   
    </div>
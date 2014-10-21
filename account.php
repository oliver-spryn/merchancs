<?php require('header.php'); ?>

<div id="page-content-wrapper">
	<div class="container">
		<div class="row">
		<div class="col-sm-3"> </div>
		<div class="col-sm-9">
			<h2>Account Settings<br/></h2>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<div id="account-controls">
							<table>
								<tr>
									<td class="topic-column">
										<span><b>Username:</b></span>
									</td>
									<td class="data-column">
										<span>User</span>
									</td>
									<td class="change-column"></td>
								</tr>
								<tr>
									<td class="topic-column">
										<span><b>Email:</b></span>
									</td>
									<td class="data-column">
										<span>user123@gcc.edu</span>
										<input type="textbox" class="edit-email" value="user123@gcc.edu"/>
									</td>
									<td class="change-column">
										<input type="button" value="Change" />
									</td>
								</tr>
								<tr>
									<td class="topic-column">
										<span class="password-topic"><b>Password:</b></span>
										<span class="edit-password"><b>New Password: </b></span>
										<span class="edit-password"><b>Confirm New Password: </b></span>
										<span class="edit-password"><b>Current Password:</b></span>
									</td>
									<td class="data-column">
										<span class="password-data">********</span>
										<input type="textbox" id="new-password" class="edit-password" value=""/>
										<input type="textbox" id="confirm-password" class="edit-password" value=""/>
										<input type="textbox" id="current-password" class="edit-password" value=""/>
									</td>
									<td class="change-column">
										<input id="password-change" type="button" value="Change"/>
										<input id="password-submit" type="button" class="edit-password" value="Submit"/>
									</td>
								</tr>
								<tr>
									<td class="topic-column">
										<span><b>Payment Info:</b></span>
									</td>
									<td class="data-column">
										<span>Credit Card<br>Master Card<br>XXXX-XXXX-XXXX-1234</span>
									</td>
									<td class="change-column">
										<input type="button" value="Change"/>
									</td>
								</tr>
								<tr>
									<td class="topic-column">
										<span><b>Shipping Address:</b></span>
									</td>
									<td class="data-column">
										<span>200 Campus Dr. <br>Grove City, PA, 16127 </span>
									</td>
									<td class="change-column">
										<input type="button" value="Change"/>
									</td>
							</table>
							<!--<ul class="account-list">
								<li class="username">
									<span><b>Username:</b></span>
									<span class="name">User</span>
								</li>
								<li class="email">
									<span><b>Email:</b></span>
									<span>user123@gcc.edu</span>
									<input type="button" value="Change"/>
								</li>
								<li class="password">
									<span><b>Password:</b></span>
									<span>********</span>
									<input type="button" value="Change"/>
								</li>
								<li class="payment">
									<span><b>Payment Info:</b></span>
									<span>Credit Card<br/> Mastercard <br/> XXXX-XXXX-XXXX-1234 </span>
									<input type="button" value="Change"/>
								</li>
								<li class="address">
									<span><b>Shipping Address:</b></span>
									<span>200 Campus Drive <br/> Grove City, PA, 16127 </span>
									<input type="button" value="Change"/>
								</li>
							</ul>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>

<?php require('footer.php'); ?>
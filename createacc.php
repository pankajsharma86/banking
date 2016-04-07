<h1>Create account</h1>

<form action="classes/create.php" method="post">
	<table>
    	<tr>
        	<th><label>Name: </label></th>
            <td><input type="text" name="name" id="name" required placeholder="Enter your name"></td>
        </tr>
        
        <tr>
        	<th><label>Address: </label></th>
            <td><input type="text" name="address" id="address" placeholder="Enter your address" required="required"></td>
        </tr>
        
        <tr>
        	<th><label>Phone: </label></th>
            <td><input type="number" name="phone" id="phone" placeholder="Enter your phone" required></td>
        </tr>
        
        <tr>
        	<th><label>Account Number: </label></th>
            <td><input type="number" name="accnumber"  id="accnumber" placeholder="Enter your account number" required></td>
        </tr>
        
        <tr>
        	<th><label>Type: </label></th>
            <td><input type="radio" name="acctype" value="cheque">Cheque</td>
            <td><input type="radio" name="acctype" value="savings">Savings</td>
        </tr>
        
        <tr>
        	<th><label>Balance: </label></th> 
            <td><input type="number" name="accbalance" id="balance" required></td>      
        </tr>
        
        <tr>
        	<td colspan="2" style="text-align:center"><input type="submit" value="Create"></td>
        </tr>
    </table>
	
</form>
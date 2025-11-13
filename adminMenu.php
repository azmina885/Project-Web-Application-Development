<html>
<head>
<title>Main Menu for Admin</title>
	<style>

    body {
      background-color: #e9c0c0;
      font-family: "Etna Sans Serif", Constantia, "Lucida Bright", "DejaVu Serif", Georgia, "serif";
      font-size: 30px;
      margin-bottom: 30px;
      color: #2b1c1c;
    }
		header {
      background-color: #fff;
      padding: 2px 80px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-radius: 50px;
      width: 90%;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
	  
	  header a {
		  font-family: "Garet", "Serif";
		  font-size: 18px;
		  color: #8a6046;
		  text-decoration: none;
	  }
		
		input {
	  font-family: "Garet", "Serif";
      background-color: #8a6046;
      color: #fff;
      border: none;
      padding: 15px 44px;
      border-radius: 30px;
      font-size: 18px;
      cursor: pointer;
      transition: background 0.3s;
    }

    input:hover {
      background-color: #6c4327;
    }
		footer {
	  font-family: "alegreya sans sc", "sans-serif";
	  font-size: 14px;
	  color: #000;
      background-color: #f6e9e9;
      border-radius: 15px;
      padding: 30px 60px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }
	
	</style>
		
</head>
<body>
	<header><table width="1287" border="0" cellspacing="3" cellpadding="5">
  <tbody>
    <tr align="center">
      <td width="185" height="77" rowspan="3">
      <h2><img src="Image/clubLink logo.png" width="179" height="67" alt=""/></h2>
    </td>
      <td width="112" rowspan="3">&nbsp;</td>
      <td width="174" rowspan="3"><a href="ClubLink.html">Home</a></td>
      <td width="174" rowspan="3"><a href="MainClubs.html">Clubs </a></td>
		<td width="174" rowspan="3"><a href="leadershipBodies.html">Leadership Bodies</a></td>
      <td width="160" rowspan="3"><a href="MainEvents.html">Events</a></td>
      <td width="169" rowspan="3"><a href="allAbout.html">About</a></td>
    </tr>
  </tbody>
</table>
</header>
	<div align="center">
<p>&nbsp;</p>
<p><strong>Main Menu for Admin</strong></p>
<form action="registerClubList.php" method="post">
<p><input type="submit" value="View Record" name="cmdView"></p>
</form>
<form action="searchRecord.php" method="post">
<p><input type="submit" value="Search Record" name="cmdSearch"></p>
</form>
<form action="deleteList.php" method="post">
<p><input type="submit" value="Delete Record" name="cmdDelete"></p>
</form>
<form action="logout.php" method="post">
<p><input type="submit" value="Log Out" name="cmdlogout"></p>
		</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
	</div>
	
<footer><div>
	    <table width="1235" height="364" border="0" cellpadding="5" cellspacing="3">
	      <tbody>
	        <tr>
	          <td height="68"><img src="Image/logo UPTM.png" width="152" height="77" alt=""/></td>
	          <td><img src="Image/clubLink logo.png" width="172" height="70" alt=""/></td>
	          <td>&nbsp;</td>
            </tr>
	        <tr>
	          <td width="465" height="268"><p><strong>UNIVERSITI POLY-TECH MALAYSIA</strong></p>
	            <p>Jalan 6/91, Taman Shamelin Perkasa, 56100 Chers, Kuala Lumpur</p>
	            <p><u>UPTM Location at:</u></p>
	            <p><a href="https://maps.app.goo.gl/J6FnpzkMTdaNZen76"><img src="Image/LOGO GMAPS.png" width="80" height="63" alt=""/></a></p></td>
	          <td width="385"><p><strong>FOR MORE DETAILS:</strong></p>
	            <p>Tel: +6012 5013451</p>
	            <p>Email: clublink@uptm.edu.my </p>
	            <p><a href="https://r.search.yahoo.com/_ylt=Awr1TYiB5A5p9AEAoW3jPwx.;_ylu=Y29sbwNzZzMEcG9zAzEEdnRpZAMEc2VjA3Nj/RV=2/RE=1763793281/RO=10/RU=https://web.whatsapp.com//RK=2/RS=sPh9U3aEDb_eJdMtE4nJy6aUgmc-"><img src="Image/whatsapp.png" width="76" height="70" alt=""/></a><a href="https://r.search.yahoo.com/_ylt=AwrKGR3P5A5pY4ICbBvjPwx.;_ylu=Y29sbwNzZzMEcG9zAzEEdnRpZAMEc2VjA3Ny/RV=2/RE=1763793359/RO=10/RU=https://web.telegram.org//RK=2/RS=j1mNvVbfPOb03q8mPkc6BspCBqs-"><img src="Image/telegram.png" width="62" height="55" alt=""/></a></p></td>
	          <td width="343"><p>&nbsp;</p>
	            <p><strong>STAY CONNECT WITH US:</strong></p>
	            <p><a href="https://www.facebook.com/"><img src="Image/facebook.png" width="60" height="58" alt=""></a>&nbsp;<a href="https://www.instagram.com/"><img src="Image/instagram.png" width="50" height="52" alt=""/></a></p>
	            <p> <a href="https://www.linkedin.com/"><img src="Image/linkedln.png" width="66" height="70" alt=""/></a><a href="https://x.com/i/flow/login?redirect_after_login=/home"><img src="Image/x.png" width="54" height="54" alt=""/></a></p>
	            <p>&nbsp;</p></td>
            </tr>
          </tbody>
        </table>
      </div></footer>
</body>
</html>

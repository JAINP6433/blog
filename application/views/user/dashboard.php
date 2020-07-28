<style type="text/css">
	.grid-container {
  display: grid;
  grid-template-columns: 240px 1fr;
  grid-template-rows: 50px 1fr 50px;
  grid-template-areas:
    "sidenav header"
    "sidenav main"
    "sidenav footer";
  height: 100vh;
}

/* Give every child element its grid name */
.header {
  grid-area: header;
  background-color: #648ca6;
}
.header li {
  display: inline;
  padding: 18px;

}
.header li a {
  color: white;

}

.sidenav {
  grid-area: sidenav;
  background-color: #394263;
}

.main {
  grid-area: main;
  background-color: #8fd4d9;
}

.footer {
  grid-area: footer;
  background-color: #648ca6;
}
 .header, .footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 16px;
    background-color: #648ca6;
  }
  h2{
  	text-align: center;
  }
  .sidenav {
    display: flex; /* Will be hidden on mobile */
    flex-direction: column;
    grid-area: sidenav;
    background-color: #394263;
  }

  .sidenav__list {
    padding: 0;
    margin-top: 0px;
    list-style-type: none;
  }

  .sidenav__list-item {
    padding: 20px 20px 20px 40px;
    color: #ddd;
  }

  .sidenav__list-item:hover {
    background-color: rgba(255, 255, 255, 0.2);
    cursor: pointer;
  }
   .main-header {
    display: flex;
    justify-content: space-between;
    margin: 20px;
    padding: 20px;
    height: 550px; /* Force our height since we don't have actual content yet */
    background-color: #e3e4e6;
    color: slategray;
  }
 
  table, th, td {
  border: 2px solid black;
  }
  table {
  	
  	width: 1000px;
  }
 
</style>

<div class="grid-container">
  <header class="header">
  	<div > 
  		<ul>
			  <li><a href="#">Home</a></li>
			  <li><a href="#">News</a></li>
			  <li><a href="#">Contact</a></li>
			  <li><a href="#">About</a></li>
		</ul>
  	</div>
  	<div>
  		<button ><a href="add">ADD</a></button>
  	</div>
    
     

  </header>
  <aside class="sidenav">
  	<h2>Dashboard</h2>
  	<ul class="sidenav__list">
    <li class="sidenav__list-item">Item One</li>
    <li class="sidenav__list-item">Item Two</li>
    <li class="sidenav__list-item">Item Three</li>
    <li class="sidenav__list-item">Item Four</li>
    <li class="sidenav__list-item">Item Five</li>
  </ul>
  </aside>
  <main class="main">
  	<div class="main-header" style="text-align: center;">
  		
  		<table>
  			<tr>
  				<th>id</th>
  				<th>title</th>
  				<th>edit</th>
                <th>delete</th>
            </tr>
            <?php
		    foreach($point as $row)
		  {
		  echo "<tr>";
		  echo "<td>".$row->id."</td>";
		  echo "<td>".$row->title."</td>";
		  $id=$row->id;?> 

		  <td><a href="update/<?php echo ($id) ;?>">edit</a></td>
		  <td><a href="delete/<?php echo ($id) ;?>"> delete</a></td>
		 
		 <?php echo "</tr>";
       }
            	?>
  		</table>
  	
  </div>
  </main>
  <footer class="footer">
  	<div class="footer__copyright">&copy; 2018 MTH</div>
    <div class="footer__signature">Made with love by pure genius</div>
  </footer>
</div>
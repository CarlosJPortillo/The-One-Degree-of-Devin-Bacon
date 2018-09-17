$(document).ready(function()
		{
			$("#button").click(function()
			{
				var first_Name = $("#first_Name").val();
				var last_Name = $("#last_Name").val();
								
					
				$.get('search.php', {first_Name: first_Name, last_Name: last_Name}, function(data)
				{
				  var x = document.getElementById("T1");
				  x.style.visibility = "visible";
				  x.innerHTML = " <tr style =\"background-color:#4EE9FA;\">"
          	       + " <th><H3>ID</H3></th>"
                       +" <th><H3>Movie Title</H3></th>"
                       +" <th><H3>Year</H3></th>"
                       +" </tr>";
				  //if data not empty array 
				  if(data!= "[]")
				  {
					var r = JSON.parse(data);
					var name;
					var year;
					

					for(i = 1; i <= r.length; i++)
					{
						name =r[i].name;
						year = r[i].year;
						if(i%2 ==1)
						{
						x.innerHTML += "<tr style = \"background-color:#E857EE;\"><th>" + i + "</th><th>" + name + "</th><th>" + year + "</th></tr>";}                                              else{
							x.innerHTML += "<tr style = \"background-color:#4EE9FA;\"><th>" + i + "</th><th>" + name + "</th><th>" + year + "</th></tr>";			
					
					}	
					}
			       	}
				else
				{
					x.innerHTML = "<H2>No Matches Found</H2>";
				}
			        });
				
				var second_query = 1;
				$.get('search.php', {first_Name: first_Name, last_Name: last_Name,
					second_query: second_query}, function(data)
                                {
                                  var x = document.getElementById("T2");
                                  x.style.visibility = "visible";
                                  x.innerHTML = " <tr style =\"background-color:#4EE9FA;\">"
                       + " <th><H3>ID</H3></th>"
                       +" <th><H3>Movie Title</H3></th>"
                       +" <th><H3>Year</H3></th>"
                       +" </tr>";

                                  if(data!= "[]")
                                  {
                                        var r = JSON.parse(data);
                                        var name;
                                        var year;
                                        for(i = 1; i <= r.length; i++)
                                        {
                                                name =r[i].name;
                                                year = r[i].year;
                                                if(i%2 ==1)
                                                {
                                                x.innerHTML += "<tr style = \"background-color:#E857EE;\"><th>" + i + "</th><th>" + name + "</th><th>" + year + "</th></tr>";}                                              else{
                                                        x.innerHTML += "<tr style = \"background-color:#4EE9FA;\"><th>" + i + "</th><th>" + name + "</th><th>" + year + "</th></tr>";

                                        }
                                        }
                                }
                                else
                                {
                                        x.innerHTML = "<H2>No Matches Found</H2>";
                                }
                                });

	
				});	
			});

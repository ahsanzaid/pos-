$(document).ready(function () {
    ////=================== UI functionality=======================//
    // get request to the data base and finally get the distributions list //
    $.get("distributionAll", function(data, status){
        $("#dislist").append(data);
      });
    // 
    $("#dis_target").click(function (event) {
        //input from input document
        var dis = $("#distributions").val();
        //checking the input from existing options//
        var options = $("#dislist option");
    console.log(options);
        var distributors = {};
        var i = 0;
        var flag=0;
        for (i = 0; i < options.length; i++) {
            distributors[options[i].text] = options[i].value;
            if (options[i].text == dis) {
                $("#distributions").val(options[i].value);
                flag++;
            }
        }
        console.log(dis);
       // inserting to the data base from data base//
        if (isNaN(dis) && flag ==0 ) {
            /// go to data base register and return the id and name with it than append in the docuument
            //data base request here
            $.post("distributionInsert",      // send HTTP POST request to a page and get the answer
                {
                    name: dis       // send data
                },
                function (data, status) { //retreive response
                    console.log(data+''+status);
                    data = parseInt(data);
                    $("#distributions").val(data);
                    //document.write(data);
                    console.log("<option value=\""+data+"\">"+ dis +"</option>");
                    $("#dislist").append('<option value="'+data+'">'+ dis +'</option>');
                });
            //======================//
            
        }


        event.preventDefault();
    });
 // ================== Submit Distributor ===================================//
    $("#distributor_submit").submit(function(){
        var distributio = $(":input[name='distribution']").val();
        var nam = $(":input[name='name']").val();
        var jo = $(":input[name='job']").val();
        var statu = $(":input[name='status']").val();
        var contac1 = $(":input[name='contact1']").val();
        var contac2 = $(":input[name='contact2']").val();
        var contac3 = $(":input[name='contact3']").val();
        $.post("distributorInsert",
        {
            distribution:parseInt(distributio),
            job: jo,
            name: nam,
            contact1: contac1,
            contact2: contac2,
            status:parseInt(statu),
            contact3: contac3   // send data
        },
        function (data, status) { //retreive response
            console.log(data+''+status);
        });

        
    });

});
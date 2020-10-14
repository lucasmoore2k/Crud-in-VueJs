<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Contacts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
    <div class="container" id="app">
        <div class="row mt-5">
            <div class="col-12 border-bottom mb-5">
                <h2>{{name}}</h2>
            </div>


            <div class="col-4">

                <form action="">

                    <div class="form-group mr-1">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Full Name" v-model="contact.name">
                    </div>


                    <div class="form-group mr-1">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" v-model="contact.email">
                    </div>

                    <div class="form-group mr-1">
                        <label>Contact</label>
                        <input type="phone" class="form-control" placeholder="Telephone Number" v-model="contact.phone">
                    </div>

                    <div class="form-group ml-1">
                        <button class="btn btn-lg btn-rounded btn-success" v-on:click.prevent="saveContact(contact)">Create a contact</button>
                    </div>
                </form>
            </div>

            <div class="col-8 border-left">
                
                <div class="contact">
                        
                    <div class="col-12 mb-2">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Contact 1</h5>

                                <p class="card-text">contact1@example.com, 1234-5678</p>

                                <a href="#" class="btn btn-sm btn-primary">EDIT</a>
                                <a href="#" class="btn btn-sm btn-danger">DELET</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        let app = new Vue({
            el : "#app",
            data:{
                name:'Contacts app',
                contact:{
                    name:'',
                    email:'',
                    phone:''
                }

            },
            methods:{
                saveContact(contact){
                    let contacts = localStorage.getItem('contactsApp');
                    if(contacts){
                        
                        contacs = JSON.parse(contacts);
                        contacts.push(contact)
                    }else{
                        //create contacts
                        contacts =[contact]
                    }

                    //update localStorage even if a new contact or new edition
                    localStorage.setItem('contactsApp',JSON.stringify(contacts))
                }
            }
        });
    </script>
</body>
</html>
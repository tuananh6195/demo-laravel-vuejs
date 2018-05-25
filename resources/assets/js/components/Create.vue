<template>
    <div>
        <h2>Add New User</h2>
        <form class="form-horizontal" action="/users" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" v-model="name">
                <span v-if="errors.name" class="error">{{errors.name[0]}}</span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" v-model="email">
                <span v-if="errors.email" class="error">{{errors.email[0]}}</span>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" v-model="password">
                <span v-if="errors.password" class="error">{{errors.password[0]}}</span>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary" v-on:click="addNewUser()">Save</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name: '',
                email: '',
                password: '',
                errors: []
            }
        },
        methods: {
            addNewUser(){
                this.errors = []

                axios.post('/api/users', {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                }).then(response => {
                    this.name = ''
                    this.email = ''
                    this.password = ''
                }).catch(error => {
                    if(error.response.status == 422){
                        this.errors = error.response.data.errors
                    }
                })
            }
        }
    }
</script>



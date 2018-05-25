<template>
    <div>
        <h2>Edit User</h2>
        <form class="form-horizontal" action="/users" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" v-model="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" v-model="email">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary" v-on:click="updateUser()">Save</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        props: ['id'],
        data() {
            return {
                name: '',
                email: '',
                password: ''
            }
        },

        mounted(){
            axios.get('/api/users/'+this.id).then(response => {
                var user = response.data
                this.name = user.name
                this.email = user.email
            }).catch(error => {
                console.log(error)
            })
        },
        methods: {
            updateUser() {
                axios.put('/api/users/'+this.id, {
                    name: this.name,
                    email: this.email
                }).then(response => {
                    console.log(response)
                }).catch(error => {
                    console.log(error)
                })
            }
        }
    }
</script>

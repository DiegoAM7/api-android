<template>
    <div>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Users Management</h2>
                </div>
                <div class="pull-right">
                    <router-link
                        class="btn btn-success"
                        :to="{ name: 'users.create' }"
                    >
                        Create New User</router-link
                    >
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" v-bind:key="user.id">
                    <td>{{ user.id }}</td>
                    <td>{{ user.names }}</td>
                    <td>{{ user.email }}</td>
                    <td>
                        <router-link
                            class="btn btn-info"
                            :to="{ name: 'users.show' }"
                            >Show</router-link
                        >
                        <router-link
                            class="btn btn-primary"
                            :to="{ name: 'users.edit' }"
                            >Edit</router-link
                        >
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            users: {},
        };
    },
    mounted() {
        this.getUsers();
    },
    methods: {
        getUsers(page = 1) {
            axios.get("/api/users?page=" + page).then((res) => {
                this.users = res.data;
            });
        },
    },
};
</script>

<style></style>

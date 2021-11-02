<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <router-link class="navbar-brand" :to="{ name: 'home' }">
                    Home
                </router-link>
                <router-link class="navbar-brand" :to="{ name: 'users.index' }">
                    Users
                </router-link>
            </div>
        </nav>
        <main class="py-4">
            <div class="container">
                <router-view></router-view>
            </div>
        </main>
    </div>
</template>

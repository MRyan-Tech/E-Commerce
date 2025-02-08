<template>
    <div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <router-link to="/" class="navbar-brand">
            <img src="" alt="">
          </router-link>
          <div class="navbar-nav">
            <router-link to="/" class="nav-link">Home</router-link>
            <router-link to="/about" class="nav-link">About</router-link>
          </div>
        </div>
      </nav>
      
      <router-view></router-view>
    </div>
  </template>
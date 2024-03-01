<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
<button v-if="$page.props.user.permissions.includes('create roles')">Create roles</button>
<button v-if="$page.props.user.permissions.includes('create lessons')">Create new  lesson</button>
</template>

<style>
 button{
    background-color: aquamarine;
    margin: 5px;
    padding: 10px;
 }
</style>

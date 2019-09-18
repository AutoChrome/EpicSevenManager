<template>
    <div>
        <button class="btn btn-primary" @click="testMethod">Test alert!</button>
    </div>
</template>

<script>
    export default {
        props: [],
        
        mounted() {
            console.log('Component mounted.')
        },
        
        methods: {
            testMethod(){
                alert("Test");
            }
        }
    }
</script>

<template>
    <div>
        Name: {{ name }}
        <SinglePostComponent></SinglePostComponent>
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent";
export default {
    name: "PostComponent",

    data() {
        return {
            name: 'Ivan'
        }
    },

    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>

<template>
    <div id="single-post">
        <h1>Single post</h1>
        {{ this.slug }}

    </div>
</template>
<script>
    import axios from 'axios';
    export default {
        name: 'SinglePost',
        data() {
            return {
                slug: this.$route.params.slug,
                post: false,
            }
        },
        mounted() {
            axios.get('http://localhost:8000/api/posts/'+ this.slug)
                .then(data => {
                    this.post = data.data
                })
        }
    }
</script>

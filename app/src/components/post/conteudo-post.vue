<template>
    <div class="postagem">

        <div class="header">
            <img :src="this.post.post.img_destacada"></img>
            <h1 class="titulo">{{this.post.post.titulo}}</h1>
            <div class="header-footer">
                <span class="auto float-left">Publicado por: {{this.post.user.name}}</span>
                <span class="auto float-right">{{formatDate(this.post.post.created_at)}}</span>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div v-html="this.post.post.conteudo" class="post-conteudo"></div>
        </div>
    </div>
</template>
<script>
    import moment from 'moment'
    export default {
        name: 'conteudo-post-single',
        props: ['post'],
        methods: {
            formatDate(value) {
                if (value) {
                    return moment(String(value)).format('DD/MM/YYYY HH:mm')
                }
            }

        },
    }
</script>
<style lang="scss">
    .postagem {
        .header {
            img {
                width: 100%;
            }
        }
    }
</style>

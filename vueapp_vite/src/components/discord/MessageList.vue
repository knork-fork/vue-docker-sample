<script setup lang="ts">
import Message from '@/components/discord/Message.vue';
import MessageSeparator from '@/components/discord/MessageSeparator.vue';
import DaySeparator from '@/components/discord/DaySeparator.vue';
</script>

<template>
    <div>
        <MessageSeparator />
        <Message
            message-content="bitcoin maka ili breaka ekonomiju nekad ovisno o tome kakva je vrijednost u pravom svijetu"
            message-author="gospodin kuča"
            timestamp="19:08"
            :show-header="false"
        />
        <Message
            message-content="osim bitcoina koji je modeliran prema pravoj cijeni"
            message-author="gospodin kuča"
            timestamp="19:07"
            :show-header="false"
        />
        <Message
            message-content="svaki item ima cijenu koju definiraju igraci"
            message-author="gospodin kuča"
            timestamp="19:07"
            :show-header="false"
        />
        <Message
            message-content="ali se cijene varijabilno mijenjaju"
            message-author="gospodin kuča"
            timestamp="19:07"
            :show-header="false"
        />
        <Message
            message-content="to ne"
            message-author="gospodin kuča"
            timestamp="19:07"
            :show-header="true"
        />
        <MessageSeparator />
        <Message
            message-content="imas ingame stock trading?"
            message-author="Bixxo"
            timestamp="19:06"
            :show-header="true"
        />
        <MessageSeparator />
        <Message
            message-content=".366 je neki kurac koji su stvorili"
            message-author="gospodin kuča"
            timestamp="19:05"
            :show-header="false"
        />
        <Message
            message-content="jedino kaj je izmisljeno su metci i oruzja koja se ne mogu nabaviti kao civil, a to su tipa 7.62 igolnik ili .366 metci ja mislim"
            message-author="gospodin kuča"
            timestamp="19:05"
            :show-header="false"
        />
        <Message
            message-content="tolko detaljno je"
            message-author="gospodin kuča"
            timestamp="19:04"
            :show-header="false"
        />
        <Message
            message-content="imas i broj od King armaments na stocku od RSASSa"
            message-author="gospodin kuča"
            timestamp="19:04"
            :show-header="false"
        />
        <Message
            message-content="nema ti izmisljenih imena"
            message-author="gospodin kuča"
            timestamp="19:03"
            :show-header="false"
        />
        <Message
            message-content="sve je official"
            message-author="gospodin kuča"
            timestamp="19:03"
            :show-header="true"
        />
        <MessageSeparator />
        <Message
            message-content="to me zacudilo"
            message-author="Bixxo"
            timestamp="19:03"
            :show-header="false"
        />
        <Message
            message-content="imaju official fucking FLIR marku u igri"
            message-author="Bixxo"
            timestamp="19:03"
            :show-header="true"
        />
        <DaySeparator 
            date="9 May 2024"
        />
    </div>
</template>

import { Component } from '@angular/core';
import { type } from 'os';

@Component({
    selector: 'app-server',
    templateUrl: './server.component.html'
})
export class ServerComponent {
    serverId: number = 10;
    serverStatus: string = 'offline';
    getServerStatus() {
        return this.serverStatus
    }
}
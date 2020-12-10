import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';

import { ServerComponent } from './server/server.component';
import { AppComponent } from './app.component';

@NgModule({
  declarations: [
    ServerComponent,
    AppComponent
  ],
  imports: [
    FormsModule,
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
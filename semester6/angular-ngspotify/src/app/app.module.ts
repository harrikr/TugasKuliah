import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import {FormsModule} from '@angular/forms';
import {HttpModule} from '@angular/http';
import { AppComponent }  from './app.component';
import { CariComponent }  from './komponen/cari/cari.component';
import { NavbarComponent }  from './komponen/navbar/navbar.component';
import { TentangComponent }  from './komponen/tentang/tentang.component';

import {routing} from './app.routing';

@NgModule({
  imports:      [ BrowserModule, routing, FormsModule, HttpModule ],
  declarations: [ AppComponent,
  				CariComponent,
  				NavbarComponent,
  				TentangComponent ],
  bootstrap:    [ AppComponent ]
})
export class AppModule { }

import { CommonModule } from '@angular/common';
import { Component, HostListener } from '@angular/core';
import { RouterLink } from '@angular/router';

import * as feather from 'feather-icons';

@Component({
  selector: 'app-nft-nav-dark',
  imports: [
    CommonModule,
    RouterLink
  ],
  templateUrl: './nft-nav-dark.html',
  styleUrl: './nft-nav-dark.scss'
})
export class NftNavDark {
  ngAfterViewInit(): void {
    feather.replace();
  }

  current:string = ''
  subManu:string = ''

  scrolled: boolean = false;

   @HostListener("window:scroll", [])

  onWindowScroll() {
      this.scrolled = window.scrollY > 0;
  }


  ngOnInit(): void {
    this.current = window.location.pathname
    window.scrollTo(0, 0);
  }

  openSubManu(item:string){
     if(this.subManu === item){
        this.subManu = ''
     }else{ this.subManu = item}
  }

  showToggleMenu:boolean = false

  toggleMenu(){
    this.showToggleMenu = !this.showToggleMenu
  }
}

import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-nft-cta',
  imports: [
    CommonModule,
    RouterLink
  ],
  templateUrl: './nft-cta.html',
  styleUrl: './nft-cta.scss'
})
export class NftCta {

}

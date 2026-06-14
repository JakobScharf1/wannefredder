import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NftNavDark } from "../../../components/navbar/nft-nav-dark/nft-nav-dark";
import { NftExplore } from "../../../components/nft-explore/nft-explore";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-creator-profile',
  imports: [
    CommonModule,
    RouterLink,
    NftNavDark,
    NftExplore,
    Footer
],
  templateUrl: './creator-profile.html',
  styleUrl: './creator-profile.scss'
})
export class CreatorProfile {

}

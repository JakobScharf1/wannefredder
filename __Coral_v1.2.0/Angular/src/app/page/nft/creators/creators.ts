import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NftNavlight } from "../../../components/navbar/nft-navlight/nft-navlight";
import { creatorData } from '../../../../data/data';
import { Footer } from "../../../components/footer/footer";

interface CreatorData{
  image: string;
  name: string;
  title: string;
}

@Component({
  selector: 'app-creators',
  imports: [
    CommonModule,
    RouterLink,
    NftNavlight,
    Footer
],
  templateUrl: './creators.html',
  styleUrl: './creators.scss'
})
export class Creators {
  creator:CreatorData[] = creatorData
}

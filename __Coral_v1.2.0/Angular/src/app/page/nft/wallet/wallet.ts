import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NftNavlight } from "../../../components/navbar/nft-navlight/nft-navlight";
import { wallet } from '../../../../data/data';
import { Footer } from "../../../components/footer/footer";

interface WalletData{
  image: string;
  name: string;
}

@Component({
  selector: 'app-wallet',
  imports: [
    CommonModule,
    RouterLink,
    NftNavlight,
    Footer
],
  templateUrl: './wallet.html',
  styleUrl: './wallet.scss'
})
export class Wallet {
  walletData:WalletData[] = wallet
}

import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NftCta } from './nft-cta';

describe('NftCta', () => {
  let component: NftCta;
  let fixture: ComponentFixture<NftCta>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [NftCta]
    })
    .compileComponents();

    fixture = TestBed.createComponent(NftCta);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

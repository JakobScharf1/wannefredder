import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioCreativeSix } from './portfolio-creative-six';

describe('PortfolioCreativeSix', () => {
  let component: PortfolioCreativeSix;
  let fixture: ComponentFixture<PortfolioCreativeSix>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioCreativeSix]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioCreativeSix);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
